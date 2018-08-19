 종속성도 부분적으로 지원을 제공합니다. 하지만 스레드 자체에서 처리해야 하는 항목을 기다리면서 스레드가 교체 상태에 빠지지 않습니다.</summary>
    </member>
    <member name="F:System.Collections.Concurrent.EnumerablePartitionerOptions.None">
      <summary>최적의 성능을 얻기 위해 버퍼링을 사용하는 기본 동작을 사용합니다.</summary>
    </member>
    <member name="T:System.Collections.Concurrent.IProducerConsumerCollection`1">
      <summary>공급자/소비자 용도의 스레드로부터 안전한 컬렉션을 조작할 메서드를 정의합니다.이 인터페이스는 <see cref="T:System.Collections.Concurrent.BlockingCollection`1" /> 같은 더 높은 수준의 추상이 기본 저장소 메커니즘으로 컬렉션을 사용할 수 있도록 생산자/소비자 컬렉션에 대한 통합 표현을 제공합니다.</summary>
      <typeparam name="T">컬렉션에 있는 요소의 형식을 지정합니다.</typeparam>
    </member>
    <member name="M:System.Collections.Concurrent.IProducerConsumerCollection`1.CopyTo(`0[],System.Int32)">
      <summary>지정된 인덱스부터 시작하여 <see cref="T:System.Collections.Concurrent.IProducerConsumerCollection`1" />의 요소를 <see cref="T:System.Array" />에 복사합니다.</summary>
      <param name="array">
        <see cref="T:System.Collections.Concurrent.IProducerConsumerCollection`1" />에서 복사한 요소의 대상인 일차원 <see cref="T:System.Array" />입니다. 배열에서 0부터 시작하는 인덱스를 사용해야 합니다.</param>
      <param name="index">
        <paramref name="array" />에서 복사가 시작되는 인덱스(0부터 시작)입니다.</param>
      <exception cref="T:System.ArgumentNullException">
        <paramref name="array" />는 null 참조(Visual Basic에서는 Nothing)입니다.</exception>
      <exception cref="T:System.ArgumentOutOfRangeException">
        <paramref name="index" />가 0보다 작은 경우</exception>
      <exception cref="T:System.ArgumentException">
        <paramref name="index" />가 <paramref name="array" />의 길이와 같거나 큰 경우 -또는- 컬렉션의 요소 수가 대상 <paramref name="array" />의 <paramref name="index" />부터 끝까지의 사용 가능한 공간보다 큰 경우. </exception>
    </member>
    <member name="M:System.Collections.Concurrent.IProducerConsumerCollection`1.ToArray">
      <summary>
        <see cref="T:System.Collections.Concurrent.IProducerConsumerCollection`1" />에 포함된 요소를 새 배열에 복사합니다.</summary>
      <returns>
        <see cref="T:System.Collections.Concurrent.IProducerConsumerCollection`1" />에서 복사된 요소를 포함하는 새 배열입니다.</returns>
    </member>
    <member name="M:System.Collections.Concurrent.IProducerConsumerCollection`1.TryAdd(`0)">
      <summary>
        <see cref="T:System.Collections.Concurrent.IProducerConsumerCollection`1" />에 개체를 추가하려고 시도합니다.</summary>
      <returns>개체가 성공적으로 추가되었으면 true이고, 그렇지 않으면 false입니다.</returns>
      <param name="item">
        <see cref="T:System.Collections.Concurrent.IProducerConsumerCollection`1" />에 추가할 개체입니다.</param>
      <exception cref="T:Syste